$(function () {

  $("#client-forms").on('click', function () {
    $("#main").empty()
    $("#main").load("tabs/clientForms.php")
  })

  $("#new-post").on('click', function () {
    $("#main").empty()
    $("#main").load("tabs/addNewPost.php")

  })

  $("#old-posts").on('click', function () {
    $("#main").empty()
    $("#main").load("tabs/showPosts.php")
  })

  $("#gallery").on('click', function () {
    $("#main").empty()
    $("#main").load("tabs/galleryView.php")

  })

  $("#add-photo").on('click', function () {
    $("#main").empty()
    $("#main").load("tabs/addPhoto.php")

  })


})