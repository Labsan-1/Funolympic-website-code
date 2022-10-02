<script >
   
/*global console*/
var likeIcon = document.getElementById("like"),
    likeCounter = likeIcon.nextElementSibling,
    loveIcon = document.getElementById("love"),
    loveCounter = loveIcon.nextElementSibling,
    comment = document.getElementById("comment"),
    addComment = comment.nextElementSibling,
    commentsContainer = document.getElementById("comments-container"),
    commentCounter = document.getElementById("comment-counter");

likeIcon.addEventListener("click", function () {
    this.classList.toggle("like");
    var numberOfLikes = Number(likeCounter.textContent);
    if (this.classList.contains("like")) {
        numberOfLikes++;
        likeCounter.textContent = numberOfLikes;
    } else {
        numberOfLikes--;
        likeCounter.textContent = numberOfLikes;
    }
});

loveIcon.addEventListener("click", function () {
    this.classList.toggle("love");
    var numberOfLoves = Number(loveCounter.textContent);
    if (this.classList.contains("love")) {
        numberOfLoves++;
        loveCounter.textContent = numberOfLoves;
    } else {
        numberOfLoves--;
        loveCounter.textContent = numberOfLoves;
    }
});

addComment.addEventListener("click", function () {
    var numberOfComments = Number(commentCounter.textContent),
        date = new Date();
    numberOfComments++;
    commentCounter.textContent = numberOfComments;
    commentsContainer.style.display = "block";
    commentsContainer.innerHTML +=
        `<div>${comment.value}
            <span>${date.toLocaleTimeString()} - ${date.toLocaleDateString()}</span>
            <i class="fa fa-trash"></i>
         </div>`;
    comment.value = "";
    var deleteIcons = document.querySelectorAll(".container .comments div i");
    for (let i = 0; i < deleteIcons.length; i++) {
        deleteIcons[i].addEventListener("click", function () {
            this.parentElement.style.display = "none";
            numberOfComments--;
            commentCounter.textContent = numberOfComments;
        });
    }
});

</script>