// codechar.js// This script processes code blocks in HTML to escape special characters
document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll("code").forEach(function (codeBlock) {
        let raw = codeBlock.innerHTML;

        // Escape < and >
        raw = raw.replace(/</g, "&lt;").replace(/>/g, "&gt;");

        // Optionally replace & as well to avoid double escaping
        raw = raw.replace(/&(?!(lt;|gt;|amp;))/g, "&amp;");

        codeBlock.innerHTML = raw;
    });
});
