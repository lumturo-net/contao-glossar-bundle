document.addEventListener("DOMContentLoaded", function() {
    document.querySelectorAll('.glossar-entry').forEach(function($element, $index) {
        $element.addEventListener('click', function() {
            var $nextElement = this.nextElementSibling;
            if($nextElement && $nextElement.classList.contains('glossar-explanation')) {
                this.nextElementSibling.remove();
            } else {
                fetch('xhr/glossar/' + this.getAttribute('data-word'))
                    .then($response => $response.text())
                    .then($response => {
                        $element.insertAdjacentHTML('afterend', `<div class="glossar-explanation">${$response} <span class="glossar-close"></span></div>`);

                        document.querySelectorAll('.glossar-close').forEach(function($closeBtn, $index) {
                            $closeBtn.addEventListener('click', function() {
                                this.parentNode.remove();
                            });
                        });
                    });
            }
        });
    });
});
