## BusinessFinder

This is a simple app with [CodeIgniter](http://codeigniter.com/) working together [Doctrine 2](http://www.doctrine-project.org/). It contains a sample search of the companies by name or address. Have a management area, when you could add new companies.

### To use

Run the command bellow after clone:

`composer update`

###Requirements

- A database called `arca_test`, with user called root, and no password.

`CREATE schema arca_test utf8_general_ci`

- Run the command below

`php application\doctrine.php orm:schema-tool:create`
`php application\doctrine.php orm:generate:proxies`