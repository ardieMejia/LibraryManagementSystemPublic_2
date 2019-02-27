A personal project still a work in progress, a Library Management System that allows library users to store books, based on category and subcategory. The database UML design may require some refinement/work, but the relationship between entities/models is enforced on the application level, so thats okay. 

The user can:
  create subcategories
  create categories
  create book that belongs to a subcategory and category

The project has no Javascript at all, and provides feedback of changes (such as deletion of book) by sending (http) state information to another page, called from its own controller (example: VerifyDeleteController.php)  

The system may require more work, such as:
  a login interface (much later stage)
  better user interface
  functions moved to its own Controller


--------------------------------------------------------
The unit tests are not ready yet.
To prepare example data, migrate first, then run:
  php artisan db:seed
--------------------------------------------------------
