@foreach($group->item as $item)
    <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->title}}</td>
        <td>{{$item->status}}</td>
        <td>
            <button class="btn btn-icon btn-light btn-hover-primary btn-sm rachehe" onclick="if (confirm('Xác nhận xoá item?')){deleteItemInGroup({{$item->id}},{{$group->id}})}">
				<span class="svg-icon svg-icon-md svg-icon-primary">
						<!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
						<svg xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink"
                             width="24px" height="24px"
                             viewBox="0 0 24 24"
                             version="1.1">
							<g stroke="none"
                               stroke-width="1" fill="none"
                               fill-rule="evenodd">
								<rect x="0" y="0" width="24"
                                      height="24"></rect>
										<path
                                            d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                            fill="#000000"
                                            fill-rule="nonzero"></path>
										<path
                                            d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                            fill="#000000"
                                            opacity="0.3"></path>
                            </g>
                        </svg>
                    <!--end::Svg Icon-->
                </span>
            </button>
        </td>
    </tr>
    <script>
        function deleteItemInGroup(item_id,group_id) {
            let tbody_id = '#table_item_in_group_' + group_id;
            $.ajax({
                url:"{{route('group.delete-item')}}",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                method:'GET',
                data:{
                    item_id:item_id,
                    group_id:group_id
                },
                success:function (res) {
                    $(tbody_id).html(res.html);
                    $(document).ready(function () {
                        Swal.fire({
                            icon: "success",
                            title: res.message,
                            showConfirmButton: false,
                            timer: 1000
                        });
                    })
                }
            })
        }
    </script>
@endforeach
@section('scripts')
    <script src="{{asset('js/pages/features/miscellaneous/sweetalert2.js')}}"></script>
@endsection
