// wait for page to load successfully
window.onload = function() {
    const projectCards = document.querySelectorAll(".project-card, .member, .project"); // select "project-card", "member", "project"
    projectCards.forEach(card => {
        // "onmouseover" event (hover)
        card.onmouseover = function() {
            card.style.transform = "scale(1.05)";
            card.style.boxShadow = "0px 4px 10px rgba(0, 0, 0, 0.3)";
        };
        // "onmouseout" event
        card.onmouseout = function() {
            card.style.transform = "scale(1)";
            card.style.boxShadow = "none";
        };
    });
}