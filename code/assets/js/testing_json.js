$.post("http://localhost/code/controller/json", {'name1' : value1, 'name2' : value2}, //name1 is the name of the parameter that send, something similar to name1=val1&name2=val2
    function(data)
    {
        $.each(data.items, function(i,item){
            alert("value: "+item.value+" name: "+item.name); //item.value e item.name because in the data object the information is set in this way: [{value:name},{value:name}...]
        });
    }, "json"
 );