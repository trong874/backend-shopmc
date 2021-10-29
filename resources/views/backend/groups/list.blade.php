@extends('backend.layout.default')
@section('meta-data')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('styles')
    <link rel="stylesheet" href="{{asset('css/my.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
@endsection
@section('content')
    <div class="card">
    <menu id="nestable-menu" class="card-title">
        <div class="row">
            <div class="col-lg-12 mb-4">
                <div class="row" style="margin: 20px;float: right">
                    <button type="button" class="btn btn-outline-primary" data-action="expand-all">Expand All</button>
                    <button type="button" class="btn btn-outline-primary" data-action="collapse-all">Collapse All
                    </button>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirm_delete_all">
                        Xóa mục đã chọn
                    </button>
                    <a href="{{route("$module.create")}}" class="btn btn-success">Add Group</a>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="confirm_delete_all" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Thông báo</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <i aria-hidden="true" class="ki ki-close"></i>
                            </button>
                        </div>
                        <div class="modal-body">
                            Xác nhận thao tác xóa item đã chọn ?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-danger font-weight-bold" id="delete_all" data-url="{{ route("groups.destroy_many") }}">Xóa</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </menu>

    <div class="dd card-body" id="nestable">
        <ol class="dd-list">
            {{showCategory($groups,$module)}}
        </ol>
    </div>
    </div>


    <?php

    function showCategory($groups,$module, $parent_id = null)
    {
        foreach ($groups as $key => $item) {
            // Nếu là chuyên mục con thì hiển thị
            if ($item->parent_id == $parent_id) {
                // Xử lý hiển thị chuyên mục
                echo '<li class="dd-item" data-id="' . $item->id . '">
                 <div class="dd-handle" ><input type="checkbox"
                        id="master-' . $item->id . '"
                         class="sub_chk-' . $parent_id . ' checkbox_category"
                           onclick="setId(' . $item->id . ')"
                            onmousedown="disabledEventPropagation(event)"
                            data-id="' . $item->id . '"
                            style="margin-right:10px">' . $item->title . '
                    <div style="float: right" onmousedown="disabledEventPropagation(event)" id="button_acction-'.$item->id.'">
                    <form method="post" action="'.route("$module.destroy",$item).'">
                    '.csrf_field().'
                    '.method_field('delete').'
                    <button type="submit" class="btn btn-sm btn-danger">Xóa</button>
                    <a href="'.route("$module.edit",$item->id).'" class="btn btn-sm btn-warning">Sửa</a>
                    </form>
                    </div>
                 </div>';
//                if ($groups[$key]->groups) {
                    echo ' <ol class="dd-list">';
                    showCategory($groups[$key]->groups,$module, $item->id);
                    echo '</ol>';
//                }
                echo '</li>';
            }
        }
    }
    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>
        function disabledEventPropagation(event) {
            if (event.stopPropagation) {
                event.stopPropagation();
            } else if (window.event) {
                window.event.cancelBubble = true;
            }
        }

        $(document).ready(function () {
            var updateOutput = function (e) {
                var list = e.length ? e : $(e.target),
                    output = list.data('output');
                if (window.JSON) {
                    output.val(window.JSON.stringify(list.nestable('serialize')));//, null, 2));
                } else {
                    output.val('JSON browser support required for this demo.');
                }
                $.ajax({
                    method: "POST",
                    url: "{{route('groups.update_list')}}",
                    data: {
                        list: list.nestable('serialize'),
                        "_token": "{{ csrf_token() }}",
                    },
                    success:function (res) {
                        console.log(res);
                    }
                }).fail(function (jqXHR, textStatus, errorThrown) {
                    console.log(errorThrown)
                });
            };
            // activate Nestable for list 1
            $('#nestable').nestable({
                group: 1
            })
                .on('change', updateOutput);

            // activate Nestable for list 2
            // $('#nestable2').nestable({
            //     group: 1
            // })
            //     .on('change', updateOutput);

            // output initial serialised data
            console.log()
            updateOutput($('#nestable').data('output', $('#nestable-output')));
            // updateOutput($('#nestable2').data('output', $('#nestable2-output')));
            $('#nestable-menu').on('click', function (e) {
                var target = $(e.target),
                    action = target.data('action');
                if (action === 'expand-all') {
                    $('.dd').nestable('expandAll');
                }
                if (action === 'collapse-all') {
                    $('.dd').nestable('collapseAll');
                }
            });

            $('#nestable3').nestable();

        });
    </script>
    <script>
        function setId(id) {
            if ($(`#master-${id}`).is(':checked', true)) {
                console.log('true')
                $(`.sub_chk-${id}`).prop('checked', true);
            } else {
                console.log('false')
                $(`.sub_chk-${id}`).prop('checked', false);
            }
        }


        $('#delete_all').on('click', function (e) {
            var allVals = [];
            $(".checkbox_category:checked").each(function () {
                allVals.push($(this).attr('data-id'));
            });

            if (allVals.length <= 0) {
                alert("Chưa chọn mục nào !");
            } else {
                var join_selected_values = allVals.join(",");
                $.ajax({
                    url: $(this).data('url'),
                    type: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: 'ids=' + join_selected_values,
                    "_token": "{{ csrf_token() }}",
                    success: function (data) {
                        location.reload();
                        if (data['error']) {
                            alert(data['error']);
                        }
                    },
                    error: function (data) {
                        alert(data.responseText);
                    }
                });
                $.each(allVals, function (index, value) {
                    $('table tr').filter("[data-row-id='" + value + "']").remove();
                });
            }
        });
        $('#changePaginate').on('input', function () {
            if (e.keyCode == 13) {
                let number = $('#changePaginate').val()
                if (number > 0) {
                    $.ajax({
                        url: '/quan-ly-sp/' + number + '/paginate',
                        method: 'GET',
                        success: function () {
                            window.location.href = '/quan-ly-sp/' + number + '/paginate';
                            console.log(number);
                        }
                    })
                }
            }

        }).on('change', function () {
            let number = $('#changePaginate').val()
            if (number > 0 && number !== null) {
                $.ajax({
                    url: '/quan-ly-sp/' + number + '/paginate',
                    method: 'GET',
                    success: function () {
                        window.location.href = '/quan-ly-sp/' + number + '/paginate';
                        console.log(number)
                    }
                })
            }
        })
    </script>
@endsection
@section('scripts')
    <script src="{{asset('js/my.js')}}"></script>
    <script src="{{asset('js/jquery.nestable.js')}}"></script>
@endsection
