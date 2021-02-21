document.addEventListener('DOMContentLoaded', () => {
    Rates.ShowAndCloseINFO();
    Rates.ShowRates();
});
class Rates {
    static ShowAndCloseINFO() {
        var sectionInfo = document.querySelector('.infoSectionRates'),
            x=sectionInfo.querySelector('.block .closeBlock img');
        if(x){
            x.addEventListener('click',()=>{
                document.body.style.overflow = 'scroll';
                sectionInfo.style.overflow = 'hidden';
                sectionInfo.style.display='none';
            });
        }
    }
    static closeRates(block){
        var mas=['moneyContent','mobileContent','partnersContent',
            'televisionContent','transportContent','bukContent',
            'utilContent','mobileSngContent','electronContent','ElMoneyContent',
            'LocalUZServices','SurSertificate','GameContent','SocSet','PROServices'];
            if(block) {
            for(let i=0; i<block.length;i++){
                for(let j=0; j<mas.length;j++) {
                    if (block[i].className === mas[j]) {
                        block[i].style.display='none';
                    }
                }
            }
            }

    }
    static ShowRates(){
        function BlockClose(blocks,Class,section,mas) {
            var blocks = blocks.querySelectorAll('div');
            if(blocks){
                Rates.closeRates(blocks);
            }
            if(Class && section){
                var moneyId=section.querySelector('#moneyContent'),
                    mobileId=section.querySelector('#mobileContent'),
                    partnersId=section.querySelector('#partnersContent'),
                    tvId=section.querySelector('#televisionContent'),
                    transportId=section.querySelector('#transportContent'),
                    bukId=section.querySelector('#bukContent'),
                    utilId=section.querySelector('#utilContent'),
                    mobileSngId=section.querySelector('#mobileSngContent'),
                    electronId=section.querySelector('#electronContent'),
                    ElMoneyContentId=section.querySelector('#ElMoneyContent'),
                    UzLocalServices=section.querySelector('#LocalUZServices'),
                    SurCard=section.querySelector('#SurSertificate'),
                    GameId=section.querySelector('#GameContent'),
                    SocSetId=section.querySelector('#SocSet'),
                    ProId=section.querySelector('#PROServices'),
                    Arr=[moneyId,mobileId,partnersId,tvId,transportId,bukId,utilId,
                        mobileSngId,electronId,ElMoneyContentId,UzLocalServices,SurCard,
                        GameId,SocSetId,ProId];
                if(mas){
                    for(let i=0; i<mas.length;i++){
                        if(Class === mas[i]){
                            for(let i=0;i<Arr.length;i++){
                                if(Arr[i].id === Class){
                                    Arr[i].style.display='block';
                                }else{
                                    Arr[i].style.display='none';
                                }
                            }
                        }
                    }
                }
            }
            if (blocks && Class && section) {
                for (let i = 0; i < blocks.length; i++) {
                    if (blocks[i].className === Class) {
                        blocks[i].style.display = 'block';
                    }
                }
                document.body.style.overflow = 'hidden';
                section.style.display = 'block';
                section.style.overflow = 'auto';

            }
        }

        var items1=document.querySelectorAll('.Items1 li'),
            items2=document.querySelectorAll('.Items2 li'),
            items3=document.querySelectorAll('.Items3 li'),
            items4=document.querySelectorAll('.Items4 li'),
            items5=document.querySelectorAll('.Items5 li'),
            infoSection=document.querySelector('.infoSectionRates'),
            block=infoSection.querySelector('.block'),
             mas2=['moneyContent','mobileContent','partnersContent',
            'televisionContent','transportContent','bukContent',
            'utilContent','mobileSngContent','electronContent','ElMoneyContent',
                 'LocalUZServices','SurSertificate','GameContent','SocSet','PROServices'];
        if(items1 && mas2){
            for(let i=0; i<items1.length;i++){
                items1[i].addEventListener('click',(event)=>{
                    var target=event.target;
                    for(let i=0;i<mas2.length;i++){
                        if(target.className === mas2[i]){
                            BlockClose(block,mas2[i],infoSection,mas2);
                        }
                    }
                });
            }
        }
        if(items2 && mas2){
            for(let i=0; i<items2.length;i++){
                items2[i].addEventListener('click',(event)=>{
                    var target=event.target;
                    for(let i=0;i<mas2.length;i++){
                        if(target.className === mas2[i]){
                            BlockClose(block,mas2[i],infoSection,mas2);
                        }
                    }
                });
            }
        }
        if(items3 && mas2){
            for(let i=0; i<items3.length;i++){
                items3[i].addEventListener('click',(event)=>{
                    var target=event.target;
                    for(let i=0;i<mas2.length;i++){
                        if(target.className === mas2[i]){
                            BlockClose(block,mas2[i],infoSection,mas2);
                        }
                    }
                });
            }
        }
        if(items4 && mas2){
            for(let i=0; i<items4.length;i++){
                items4[i].addEventListener('click',(event)=>{
                    var target=event.target;
                    for(let i=0;i<mas2.length;i++){
                        if(target.className === mas2[i]){
                            BlockClose(block,mas2[i],infoSection,mas2);
                        }
                    }
                });
            }
        }
        if(items5 && mas2){
            for(let i=0; i<items5.length;i++){
                items5[i].addEventListener('click',(event)=>{
                    var target=event.target;
                    for(let i=0;i<mas2.length;i++){
                        if(target.className === mas2[i]){
                            BlockClose(block,mas2[i],infoSection,mas2);
                        }
                    }
                });
            }
        }
    }
}

