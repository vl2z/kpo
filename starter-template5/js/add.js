<script language="javascript">
function add_input()
{
// Создаем новый div-элемент
var new_input=document.createElement('div');
// Тут мы уже можем воспользоваться innerHTML потому, что изменения не коснуться всего остального докуметна
new_input.innerHTML='<br>инпут №'+document.getElementById('inputi').getElementsByTagName('div').length+'<br><input name="my_input">';
// Добавляем только что созданный div на страницу
document.getElementById('inputi').appendChild(new_input);
}
function del_input()
{
//  удаляем последний div в нутри id=inputi
document.getElementById('inputi').removeChild(document.getElementById('inputi').getElementsByTagName('div')[document.getElementById('inputi').getElementsByTagName('div').length-1])
}
</script>