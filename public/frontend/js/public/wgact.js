wgact = function () {

    const wgactDeduper = {
        keyName          : '_wgact_order_ids',
        cookieExpiresDays: 365
    };

    function writeOrderIdToStorage(orderId, expireDays = 365) {

        // save the order ID in the browser storage

        if (!window.Storage) {
            let expiresDate = new Date();
            expiresDate.setDate(expiresDate.getDate() + wgactDeduper.cookieExpiresDays);

            let ids = [];
            if (checkCookie()) {
                ids = JSON.parse(getCookie(wgactDeduper.keyName));
            }

            if (!ids.includes(orderId)) {
                ids.push(orderId);
                document.cookie = wgactDeduper.keyName + '=' + JSON.stringify(ids) + ';expires=' + expiresDate.toUTCString();
            }

        } else {
            if (localStorage.getItem(wgactDeduper.keyName) === null) {
                let ids = [];
                ids.push(orderId);
                window.localStorage.setItem(wgactDeduper.keyName, JSON.stringify(ids));

            } else {
                let ids = JSON.parse(localStorage.getItem(wgactDeduper.keyName));
                if (!ids.includes(orderId)) {
                    ids.push(orderId);
                    window.localStorage.setItem(wgactDeduper.keyName, JSON.stringify(ids));
                }
            }
        }

        if (typeof wgactStoreOrderIdOnServer === 'function' && wgact_order_deduplication) {
            wgactStoreOrderIdOnServer(orderId);
        }
    }

    function getCookie(cname) {
        let name = cname + "=";
        let ca   = document.cookie.split(';');
        for (let i = 0; i < ca.length; i++) {
            let c = ca[i];
            while (c.charAt(0) === ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) === 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }

    function checkCookie() {
        let key = getCookie(wgactDeduper.keyName);
        return key !== "";
    }

    function isOrderIdStored(orderId) {

        if(wgact_order_deduplication){
            if (!window.Storage) {

                if (checkCookie()) {
                    let ids = JSON.parse(getCookie(wgactDeduper.keyName));
                    return ids.includes(orderId);
                } else {
                    return false;
                }
            } else {
                if (localStorage.getItem(wgactDeduper.keyName) !== null) {
                    let ids = JSON.parse(localStorage.getItem(wgactDeduper.keyName));
                    return ids.includes(orderId);
                } else {
                    return false;
                }
            }
        } else {
            return false;
        }
    }

    return {
        writeOrderIdToStorage: writeOrderIdToStorage,
        isOrderIdStored      : isOrderIdStored
    }

}();
