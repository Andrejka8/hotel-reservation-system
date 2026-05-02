let carousel_s_form =document.getElementById('carousel_s_form');
let carousel_picture_inp =document.getElementById('carousel_picture_inp');

carousel_s_form.addEventListener('submit', function(e)
    {
        e.preventDefault();
        add_image();
    }
)

function add_image()
{
    let data = new FormData();
    data.append('picture', carousel_picture_inp.files[0]);
    data.append('add_image', '');

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/carousel_crud.php", true);

    xhr.onload = function()
    {
        var myModal = document.getElementById('carousel-s');
        var modal = bootstrap.Modal.getInstance(myModal);
        modal.hide();

        if(this.responseText == 'inv_img')
        {
            alert('error', 'Pouze JPG a PNG obrázky jsou povoleny');
        }
        else if(this.responseText == 'inv_size')
        {
            alert('error', 'Obrázek musí mít méně než 2 Mb');
        }
        else if(this.responseText == 'upd_failed')
        {
            alert('error', 'Nahrání obrázku selhalo. Server selhal!');
        }
        else
        {
            alert('success', 'Nový obrázek přidán');
            carousel_picture_inp.value = '';
            get_carousel();
        }

    }
    xhr.send(data);
}

function get_carousel()
{
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/carousel_crud.php", true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onload = function()
    {
        document.getElementById('carousel-data').innerHTML = this.responseText;
    }
    xhr.send('get_carousel');
}

function rem_image(val)
{
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/carousel_crud.php", true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onload = function()
    {
        if(this.responseText==1)
        {
            alert('success', 'Obrázek vymazán');
            get_carousel();
        }
        else
        {
            alert('error', 'Server selhal');
        }
    }
    xhr.send('rem_image='+val);
}

window.onload = function()
{
    get_carousel();
}