App Symfony Learning
========================

** Add Controller file 

** Create folder todo
... Create file index.html.twig
... Create file create.html.twig
... Create file edit.html.twig
... Create file details.html.twig

Now to the controller add the four methods corresponding to views file.

for example : method indexAction

```php
    /**
     * @Route("/todo", name="todo_list")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('todo/index.html.twig');
    }
```

```php
    /**
     * @Route("/todo/create", name="todo_create")
     */
    public function indexAction(Request $request)
    {
        // code
    }
```




