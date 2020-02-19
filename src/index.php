<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My App</title>

    <style>
        div{
            padding: 10px 0px;
        }
        label{

        }
    </style>
</head>
<body style="text-align:center;padding-top:100px">
    <div >
        <h1 >Add a book</h1>
    </div>
    
    <div>
        <form action="book-entry" action="index.php">
            <div >
                <label for="book">Book title </label>
                <input type="text" name="title" id="title" placeholder="Book title">
            </div>    
            <div>    
                <label for="author">Author</label>
                <input type="text" name="" id="author" placeholder="Author">
            </div>    
            <div>    
                <label for="number">Number of books</label>
                <input type="number" name="" id="number">
            </div>
            <div>
                <input type="button" onclick="savebook()" value="Add Book">
            </div>
        </form>
    </div>


    <div id="table">
        <table>
            <Th>Title</Th> <Th>Author</Th><Th>Number</Th>
            <tr><td id="ptitle"></td><td id="pauth"></td><td id="pnum"></td></tr>
        </table>
    </div>

    <script> 
        function savebook(){
            var data = document.getElementById("book-entry");

            var title = document.getElementById("title").value
            var author = document.getElementById("author").value
            var number = document.getElementBy  Id("number").value
            
            document.getElementById("ptitle").innerHTML = title;
            document.getElementById("pauth").innerHTML = author;
            document.getElementById("pnum").innerHTML = number;
        }
    </script>
</body>


</html>
