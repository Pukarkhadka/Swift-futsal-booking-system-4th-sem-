function removeOverflow (id) {
    const cardElement = document.getElementById(`${id}`);

    cardElement.style.height = "max-content";
    cardElement.style.overflow = "none";
}