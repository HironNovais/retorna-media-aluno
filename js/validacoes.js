function validarFormulario(){

    let nota_1 = document.getElementById('nota_01_id');
    let nota_2 = document.getElementById('nota_02_id');
    let nota_3 = document.getElementById('nota_03_id');
    let nota_4 = document.getElementById('nota_04_id');

    let regex = /^d{1,2}$/g;

    if(parseFloat(nota_1.value)==0 || parseFloat(nota_1.value)>10){
        alert('A nota 1 deve ser um valor entre 0 e 10')
        return false;
    }else if(parseFloat(nota_2.value)== 0 || parseFloat(nota_2.value)>10){
        alert('A nota 2 deve ser um valor entre 0 e 10')
        return false;
    }else if(parseFloat(nota_3.value)==0 || parseFloat(nota_3.value)>10){
        alert('A nota 3 deve ser um valor entre 0 e 10')
        return false;
    }else if(parseFloat(nota_4.value)==0 || parseFloat(nota_4.value)>10){
        alert('A nota 4 deve ser um valor entre 0 e 10')
        return false;
    }else if(nota_1.value == '' || nota_2.value == '' || nota_3.value == '' || nota_4.value == ''){
        alert('Preencha o formulário corretamente!')
        return false;
    }
    
    if (regex.test(parseFloat(nota_1.value)) == false || regex.test(parseFloat(nota_2.value)) == false || regex.test(parseFloat(nota_3.value)) == false || regex.test(parseFloat(nota_4.value)) == false){
        alert('Insira apenas números inteiros, de 1 a 10!')
        return false;
    }
    
}