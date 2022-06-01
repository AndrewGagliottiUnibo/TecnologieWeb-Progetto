/*
NB: Il codice va eseguito all'interno di un webserver
*/

$(document).ready(function(){
    const list = $("ul");

    $("button").click(function(){
        $.ajax({url: "colors.json", success: function(result){
            for(let i=0; i<result.length; i++){
                let li =  `
                <li>
                    <p>${result[i].color}:</p> 
                    <div style="background-color: ${result[i].value}"></div>
                </li>
                `;
                list.append(li);
            }
                
        }});
    });
});
