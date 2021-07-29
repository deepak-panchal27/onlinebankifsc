<div class="container">
    <hr>
    <?php require_once (PROJECT_PATH."social.php"); ?>
    <footer>
        <div class="row">
            <div class="col-md-6">
                <p>Copyright &copy; 2021 Online Bank IFSC</p>
            </div>
            <div class="col-md-6 text-md-right">
                <a href="https://onlinebankifsc.com/privacy-policy" class="text-dark">Privacy Policy</a>
            </div>
        </div>
    </footer>
    <script>
        var whatsappURL = "https://wa.me/?text=" + encodeURIComponent(window.location.href);
        (a = document.querySelector(".whatsapp")).href = whatsappURL;
        var facebookURL = "https://www.facebook.com/sharer.php?u=" + encodeURIComponent(window.location.href);
        (a = document.querySelector(".facebook")).href = facebookURL;
        var twitterURL = "https://twitter.com/home/?status=" + encodeURIComponent(window.location.href);
        (a = document.querySelector(".twitter")).href = twitterURL;
        var linkedinURL = "https://www.linkedin.com/shareArticle?url=" + encodeURIComponent(window.location.href);
        (a = document.querySelector(".linkedin")).href = linkedinURL;
        var a, redditURL = "https://www.reddit.com/submit?url=" + encodeURIComponent(window.location.href);
        (a = document.querySelector(".reddit")).href = redditURL;
    </script>
</div>
</div>
</body>

</html>