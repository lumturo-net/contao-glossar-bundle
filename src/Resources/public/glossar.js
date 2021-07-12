function textNodesContaining(txt, root = document.body) {
    let nodes = [],
        node,
        tree = document.createTreeWalker(
            root,
            4, // NodeFilter.SHOW_TEXT
            {
                acceptNode: function(node) {
                    return (node.parentNode.tagName === 'P' || node.parentNode.tagName === 'LI') && RegExp(txt).test(node.data)
                }
            }
        );
    while (node = tree.nextNode()) { // only return accepted nodes
        nodes.push(node);
    }

    return nodes;
}

document.addEventListener("DOMContentLoaded", function() {
    fetch('xhr/glossar')
        .then($response => $response.text())
        .then($response => {
            const $glossar = JSON.parse($response);
            for (var $index in $glossar) {
                if ($glossar.hasOwnProperty($index)) {
                    textNodesContaining($index).map(function($node) {
                        $node.parentNode.innerHTML = $node.parentNode.innerHTML.replace($index, `<span class="glossar-entry" data-word="${$index}">${$index}</span>`);
                    });
                }
            }

            document.querySelectorAll('.glossar-entry').forEach(function($element, $index) {
                $element.addEventListener('click', function() {
                    var $word        = this.getAttribute('data-word');
                    var $nextElement = this.nextElementSibling;
                    if($nextElement && $nextElement.classList.contains('glossar-explanation')) {
                        this.nextElementSibling.remove();
                    } else {
                        $element.insertAdjacentHTML('afterend', `<div class="glossar-explanation">${$glossar[$word]} <span class="glossar-close"></span></div>`);

                        document.querySelectorAll('.glossar-close').forEach(function($closeBtn, $index) {
                            $closeBtn.addEventListener('click', function() {
                                this.parentNode.remove();
                            });
                        });
                    }
                });
            });
        });
});
