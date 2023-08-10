var xo = 0;
var chances = 0;
var p1 = prompt("Enter Player-1 Name: ");
var p2 = prompt("Enter Player-2 Name: ");
document.getElementById('player1').innerHTML=p1+ " your token is 'X'  :";
document.getElementById('player2').innerHTML= p2+" your token is 'O'  :";
var p1won = 0 , p2won = 0;
document.getElementById('p1won').innerHTML=p1won;
document.getElementById('p2won').innerHTML=p2won;
function token(){
    xo++;
    if(xo % 2 == 1 ){
        return 'X';
    }
    return 'O'
}
function check(){
    var input=[[document.getElementById('one').value,
                document.getElementById('two').value,
                document.getElementById('three').value],
               [document.getElementById('four').value,
                document.getElementById('five').value,
                document.getElementById('six').value],
               [document.getElementById('seven').value,
                document.getElementById('eight').value,
                document.getElementById('nine').value]];
    
    let win=0;//if win=0 game is running if win=1 game ended

    //horizontal and vertical check 
    for(let i=0;i<3;i++){
        if(input[i][0] === input[i][1] && input[i][0] === input[i][2] && 
            (input[i][0] === 'X' || input[i][0] === 'O')){

                win++;
        }
        if(input[0][i] === input[1][i] && input[0][i] === input[2][i] && 
            (input[0][i] === 'X' || input[0][i] === 'O')){

                win++;
        }
    }
    
    //diagnal check
    if(input[0][0] === input[1][1] && input[0][0] === input[2][2] && 
        (input[0][0] === 'X' || input[0][0] === 'O')){

            win++;
    }
    if(input[0][2] === input[1][1] && input[1][1] === input[2][0] && 
        (input[0][2] === 'X' || input[0][2] === 'O')){

            win++;
    }

    if(win === 1){
        var winningplyr=token();
        if(winningplyr === 'O'){
            reset();
            alert("player X wins");
            p1won++;
            document.getElementById('p1won').innerHTML=p1won;
        }
        if(winningplyr === 'X'){
            reset();
            alert("player O wins");
            p2won++;
            document.getElementById('p2won').innerHTML=p2won;
        }
    }
    chances++;
    if(chances === 9 && win === 0){
        reset();
        alert("Its a Draw ");
    }
    
    if(p1 == 5){
        alert("Tada..! And the final winner is " + p1); 
    }
    else if(p1 == 5){
        alert("Tada..! And the final winner is " + p2);
    }
    
}
function reset(){
    document.getElementById('one').value = '';
    document.getElementById('two').value = '';
    document.getElementById('three').value = '';
    document.getElementById('four').value = '';
    document.getElementById('five').value = '';
    document.getElementById('six').value = '';
    document.getElementById('seven').value = '';
    document.getElementById('eight').value = '';
    document.getElementById('nine').value = '';
    xo=0;
}