const currlocation = (document.URL.includes('in-hi'))?'hi':'en';
document.addEventListener('DOMContentLoaded', function() {
    const lang2 = document.getElementById("lang2");
    lang2.addEventListener('change',event => {
        if(lang2[lang2.selectedIndex].value == 'hi' && currlocation == 'en'){
            window.location.href = '/in-hi/shows';
        } else if(lang2[lang2.selectedIndex].value == 'en' && document.URL.includes('in-hi')){
            window.location.href = '/shows';
        }
    });
});