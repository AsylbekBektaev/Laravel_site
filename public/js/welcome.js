document.addEventListener('DOMContentLoaded', () => {
    Welcome.ShowAndCloseINFO();
});
class Welcome {
    static ShowAndCloseINFO() {
        var sectionInfo = document.querySelector('.infoSectionWelcome'),
            x=sectionInfo.querySelector('.block .closeBlock img');
        if (sectionInfo) {
            // document.body.style.overflow = 'hidden';
            sectionInfo.style.display = 'block';
            sectionInfo.style.overflow = 'auto';
        }
        if(x){
            x.addEventListener('click',()=>{
                // document.body.style.overflow = 'scroll';
                sectionInfo.style.overflow = 'hidden';
                sectionInfo.style.display='none';
            });
        }
    }
}


