<head>
    <link rel="stylesheet" href="style2.css">
</head>
<section class="form">
    <div class="container">
        <h1 class="catalog-title">Добавление товара</h1>
        <form method="post" action="../createproduct.php" enctype="multipart/form-data">
            <p>
                <label for="id1">Наименование:</label>
                <input type="text" name="name" id="id1">
            </p>
            <p>
                <label for="id2">Описание:</label>
                <input type="text" name="description" id="id2">
            </p>
            <p>
                <label for="id3">Цена:</label>
                <input type="text" name="price" id="id3">
            </p>
            <p>
                <label for="id4">Изображение:</label>
                <input type="file" name="picture[]" id="id4" multiple>
            </p>
            <p>
                <label for="id5">Тип:</label>
                <select name="type" id="id5">
                    <option value="furniture">Мебель</option>
                    <option value="lightning">Освещение</option>
                    <option value="furniture">Гарнитура</option>
                    <option value="furniture">Предметы</option>
                    <option value="furniture">Комплекты</option>
                    <option value="furniture">Другое</option>
                </select>
            </p>
            <p>
                <label for="id6">Цвет:</label>
<!--                <select name="colors" multiple size="5" id="id6">-->
                <select name="colors" id="id6">
                    <option value="blue">Синий</option>
                    <option value="green">Зеленый</option>
                    <option value="red">Красный</option>
                    <option value="black">Черный</option>
                    <option value="white">Белый</option>
                    <option value="brown">Коричневый</option>
                </select>
            </p>
            <p><input type="button" value="Создать" onclick="validate(this.form)"></p>
        </form>
    </div>
</section>
<script>

    function validate(xxx) {
        var formData = new FormData(xxx);
        if (xxx.name.value === '')
            alert("Вы не ввели наименование товара!");
        else if (xxx.description.value === '')
            alert("Добавьте описание товара, пожалуйста!");
        else if (!Number.isInteger(parseInt(xxx.price.value)) || (String(parseInt(xxx.price.value)) !== xxx.price.value) || parseInt(xxx.price.value)<0)
            alert("Цена должна быть целым положительным числом!");
        // else if (!formData.has("picture[]"))
        //     alert("Вы не добавили изображение");
        else {
            var file = formData.get("picture[]");
            if (!file.size) {
                alert("Вы не добавили изображение");
                return;
            }
            var fileType = file.type;
            if (fileType !== 'image/jpeg' && fileType !== 'image/png') {
                alert("Файл не является форматом JPG или PNG!");
                return;
            }

            var result = false;
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'checkname.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onreadystatechange = function() {
                if (this.readyState === 4 && this.status === 200) {
                    var response = this.responseText;
                    // alert (response);
                    // console.log(response);
                    if(xhr.responseText.trim() == "1") {
                        alert('Товар с таким наименованием уже существует!');
                        // console.log(response);
                    } else {
                        alert("Поздравляю! Форма заполнена верно!");
                        xxx.submit();
                    }
                }
            };

            xhr.send('name=' + encodeURIComponent(xxx.name.value));

           }
        }


    //
    // function deleteProduct(id) {
    //     if (confirm("Вы уверены, что хотите удалить этот товар?")) {
    //         var xhr = new XMLHttpRequest();
    //         xhr.open('POST', 'deleteproduct.php', true);
    //         xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    //         xhr.onreadystatechange = function() {
    //             if (xhr.readyState === 4 && xhr.status === 200) {
    //                 var response = xhr.responseText;
    //                 if (response === 'success') {
    //                     alert('Товар успешно удален!');
    //                     location.reload();
    //                 } else {
    //                     alert('Не удалось удалить товар!');
    //                 }
    //             }
    //         };
    //         xhr.send('id=' + encodeURIComponent(id));
    //     }
    // }


</script>



