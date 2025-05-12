function closeModal() {
    document.getElementById('thankYouModal').style.display = 'none';
}

window.onload = function () {
    const params = new URLSearchParams(window.location.search);
    if (params.get("success") === "true") {
        const modal = document.getElementById("thankYouModal");
        if (modal) {
            modal.style.display = "block";

            // Optional: Clean the URL
            window.history.replaceState({}, document.title, window.location.pathname);
        }
    }
};
