function showSection(sectionID){
    const sections = document.querySelectorAll('.content, .homecontent');

    sections.forEach(section => {
        section.style.display = 'none';
    });

    const active = document.getElementById(sectionID);
    if(active){
        active.style.display = 'block';
    }
}

document.addEventListener("DOMContentLoaded", () => {

    showSection('home');

    // Clear button
    const clrBtn = document.getElementById("clrbtn");
    if (clrBtn) {
        clrBtn.addEventListener("click", () => {
            clrBtn.closest("form").reset();
        });
    }


    const params = new URLSearchParams(window.location.search);
    if (params.get('status') === 'success') {

        showSection('create');

        const toast = document.getElementById('success-toast');
        toast.classList.remove('toast-hidden');

        setTimeout(() => {
            toast.style.opacity = '0';
            setTimeout(() => toast.classList.add('toast-hidden'), 500);
        }, 3000);

        window.history.replaceState({}, document.title, window.location.pathname);
    }
});