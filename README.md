Symfony2 Project
====================

This is a very silly Docker project that runs an example Symfony2 project using the `webdevops/php-apache-dev` as the base image.

1) Image Creation
--------

First of all, you need to create the image using the `Dockerfile` in the project.
In order to do this, you need to run the following command:
    ```docker build . -t symfony2``` 
This will create an image called `symfony2`

2) Running the App
--------
You can do this by running the follow docker run command:
```docker run -p 80:80 -v $(pwd)/project:/app symfony2```

Please notice how the `run` command requires for the full path to the `project` directory, otherwise the project will not work
And then you'll be able to go to [localhost](http://localhost/) and see the Symfony2 project running.

```http://localhost/index.php/hello/carlos```

Happy coding!
