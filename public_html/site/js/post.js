
function SendPost() {
	var phone=document.getElementById("phone").value
	 pass=document.getElementById("password").value;
	//отправляю GET запрос и получаю ответ
	$$a({
		type:'post',//тип запроса: get,post либо head
		url:'login2.php',//url адрес файла обработчика
		data:{'phone':phone,'password':pass},//параметры запроса
		response:'text',//тип возвращаемого ответа text либо xml
		success:function (data) {//возвращаемый результат от сервера
			$$('result',$$('result').innerHTML+'<br />'+data);
		}
	});
}
