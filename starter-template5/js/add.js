<script language="javascript">
function add_input()
{
// ������� ����� div-�������
var new_input=document.createElement('div');
// ��� �� ��� ����� ��������������� innerHTML ������, ��� ��������� �� ��������� ����� ���������� ���������
new_input.innerHTML='<br>����� �'+document.getElementById('inputi').getElementsByTagName('div').length+'<br><input name="my_input">';
// ��������� ������ ��� ��������� div �� ��������
document.getElementById('inputi').appendChild(new_input);
}
function del_input()
{
//  ������� ��������� div � ����� id=inputi
document.getElementById('inputi').removeChild(document.getElementById('inputi').getElementsByTagName('div')[document.getElementById('inputi').getElementsByTagName('div').length-1])
}
</script>