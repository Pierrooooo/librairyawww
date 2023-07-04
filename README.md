# librairyawww

## Instalation
```bash composer require pierre_cours/librairyawww ```
```bash composer i ```

## Local Environment

```bash vendor/bin/phpstan analyse src --level=max ```
```bash vendor/bin/php-cs-fixer fix src --rules=@PSR12 ```
```bash vendor/bin/phpunit tests ```

## How it works

In the Api.php file you fetch the url line 18(awwwards), then you get the html Content of the website. From the html you got, you use a filter to find all the elements that has the class "card-site".It return two things which are the text which can either exist or not, to avoid a bug I set a default value of "undefined". The second thing it return is a second filter to get the tags like HM(Honorable Mention) or SOTD(Site Of The Day), it make a second crawl that return an array and in this array Ifound the tags with the class "has-tooltip".