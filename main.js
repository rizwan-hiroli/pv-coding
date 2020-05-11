var request = new XMLHttpRequest()

//function accepts url to call.
function sendRequest(url) {

  request.open('GET', url, true)
  request.onload = function() {
    
    // Begin accessing JSON data here
    var data = JSON.parse(this.response)
    
    if (request.status >= 200 && request.status < 400) {
      data.forEach(article => {
          test = '<div class="column"><a href="'+'http://www.pinkvilla.com'+article.path+'" class="title-link"><img src="'+article.imageUrl+'" class="preview-image"><div class="row"><div class="title col-sm-9 col-md-9"> '+article.title+' </div><div class="pull-right col-sm-3 col-md-3" style="padding-top: 8px;"><i class="fas fa fa-ellipsis-h"></i></div></div></a></div>';
          document.getElementById("photos").innerHTML += test;
      })
    } else {
      console.log('error')
    }
    document.getElementById("loader").style.display = 'none';
  }

  request.send();

}


