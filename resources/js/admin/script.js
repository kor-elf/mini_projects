(function() {
    function clickConfirmAddEventListener(element, index, array) {
        element.addEventListener('click', (e) => {
            const result = confirm('Delete?');
            if (! result) {
                e.preventDefault();
            }
        });
    }
    let clickConfirm = document.querySelectorAll('.click-confirm');
    if (clickConfirm.length > 0) {
        clickConfirm.forEach(clickConfirmAddEventListener);
    }
})();
