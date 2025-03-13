// #region copyAndShowTooltip
function copyAndShowTooltip(event, textToCopy, tooltipText) {
    if (navigator.clipboard) {
        navigator.clipboard
            .writeText(textToCopy)
            .then(() => {
                let tooltip = document.createElement("div");
                tooltip.className = "tooltip";
                tooltip.innerText = tooltipText;
                document.body.appendChild(tooltip);

                const button = event.target;
                const rect = button.getBoundingClientRect();

                tooltip.style.top = "0px";
                tooltip.style.left = "0px";
                const tooltipWidth = tooltip.offsetWidth;
                const tooltipHeight = tooltip.offsetHeight;

                let leftPos = rect.left + rect.width / 2 - tooltipWidth / 2;
                leftPos = Math.max(
                    0,
                    Math.min(leftPos, window.innerWidth - tooltipWidth)
                );

                let topPos = rect.top - tooltipHeight - 5;
                if (topPos < 0) {
                    topPos = rect.bottom + 5;
                }

                tooltip.style.left = leftPos + "px";
                tooltip.style.top = topPos + "px";

                setTimeout(() => {
                    tooltip.style.opacity = 1;
                }, 10);

                setTimeout(() => {
                    tooltip.style.opacity = 0;
                    setTimeout(() => {
                        tooltip.remove();
                    }, 300);
                }, 2000);
            })
            .catch((err) => {
                console.error("Fehler beim Kopieren:", err);
            });
    } else {
        console.warn("Clipboard API wird in diesem Browser nicht unterstützt.");
    }
}

window.copyAndShowTooltip = copyAndShowTooltip
// #endregion

// #region copyAnkorLink
function copyAnkorLink(event, id) {
    const url = window.location.href.split('#')[0] + '#' + id;
    if (navigator.clipboard) {
        navigator.clipboard.writeText(url)
            .catch(err => {
                console.error('Fehler beim Kopieren:', err);
            });
    } else {
        console.warn("Clipboard API wird in diesem Browser nicht unterstützt.");
    }
}

window.copyAnkorLink = copyAnkorLink
// #endregion
