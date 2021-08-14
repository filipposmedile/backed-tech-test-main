# Pixel

At Pixel we use Laravel as a headless API, and have a separated FE that consumes the API, so we don't do any HTML/CSS in the API project.

---

## Tech Test

---

### Setup

```
cp .env.example .env

composer install

php artisan key:generate

php artisan migrate --seed
```

### Test

For this tech test we have set up a basic Laravel app, for you to work off, with blogs and comments tables already set up.

To complete the test we would like you to add 5 endpoints to the `api.php` routes file, which will allow a consumer to grab the blogs, get single blog with comments, add a new comment to a blog, edit a comment, and delete a comment.

It should only respond with json, you don't need to complete any front end forms/layouts.

The endpoints should be:

-   GET blogs
-   GET single blog with comments
-   POST comment to a blog
-   PUT comment
-   DELETE comment

All of the routes should be public, and not behind any auth;

Please fork this repo and submit the link to your public repository from your account. Please commit along the way so we can see a history of you working through the tasks.

---

# Pixel
