
/*drop down*/
const selectBox = document.getElementById("select-option");

selectBox.addEventListener('change', (evt) => {  
  const oneMonth_ul = document.getElementById('1month_ul');
  const threeMonth_ul = document.getElementById('3month_ul');
  const sixMonth_ul = document.getElementById('6month_ul');
  const oneYear_ul = document.getElementById('1year_ul');
  const value = selectBox.options[selectBox.selectedIndex].getAttribute('value');

    switch(value){
      case "1":{
        oneMonth_ul.style = "display: block";
        threeMonth_ul.style = "display: none";
        sixMonth_ul.style = "display: none";
      one1Year_ul.style = "display: none";
        break;
      }
      case "2": {
        console.log('hiii');
        oneMonth_ul.style = "display: none";
        threeMonth_ul.style = "display: block";
        sixMonth_ul.style = "display: none";
        oneYear_ul.style = "display: none";
         break;
      }
      case "3": {
        oneMonth_ul.style = "display: none";
        threeMonth_ul.style = "display: none";
        sixMonth_ul.style = "display: block";
        oneYear_ul.style = "display: none";
         break;
      }
      case "4": {
        oneMonth_ul.style = "display: none";
        threeMonth_ul.style = "display: none";
        sixMonth_ul.style = "display: none";
        oneYear_ul.style = "display: block";
         break;
      }
       case "5": {
        oneMonth_ul.style = "display: block";
        threeMonth_ul.style = "display: none";
        sixMonth_ul.style = "display: none";
        oneYear_ul.style = "display: none";
         break;
      }
      default: {
        
      }
    }
});
