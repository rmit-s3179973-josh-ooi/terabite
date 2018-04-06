# terabite E-Commerce Website

## How-To Instructions

### Git Commands

Git main commands:

```
git status
git add -A
git pull [remote_name] [branch]
git push -u [remote_name] [branch]
git commit -m "[MESSAGE]"
```

###### Step-by-step Guide
1. `git pull origin master` : load the latest changes from github. `origin` should be your remote name that links to the github address. you can check your remote name by running `git remote` to display the available remotes. `master` is the branch. if there is another branch in the repository, you may specify it after the remote name. This will pull changes from a specifc branch into your local working files.
2. `git status`: view the stage and unstage files.
3. `git add -A`: stage all unstage file.
4. `git commit -m "commit message here"`: commit the files
5. `git push -u origin master`: push your changes into github. once again, the remote and branch variables works the same as `git pull`. 

It is very IMPORTANT to do a `git pull` before a `git push`. if a push is run, it could cause an overwrite of the previous changes and could be disastrous.

if a git pull command is run and there is a `conflicting error`, make changes to the conflicting file(s), files are normally specified in the command line, then run `git add -A` and git `git commit` after. git won't allow you to commit conflicting errors.

it is good practice to frequently commit your code (just run git add and git commit), especially once a function is implemented. it provide analyical feedback as well as a recovery tool. for instance, if the new functionality breaks the system, you could reset your code to the previous commit.

### Vagrant Commands

There are three fundamental commands when using vagrant. 
```
vagrant up
vagrant halt
vagrant provision
```

when you want to bring up the local server, run `vagrant up` in the command line and it will boot up the server.
As the name suggest, to stop the local server, run the command `vagrant halt`. If there were any changes made to the local
server environment file, run `vagrant provision` and it will recalibrate the server to the new setting. This command should be executed when the server is still running. In most cases, you would not need to run `vagrant provision`.

If the server is not running and changes are made to the vagrant environment, run `vagrant up --provision` to bring up the local server with the new setting.

The vagrant environment file is name `homestead.yaml`. It is located in the project root folder. 

the local server IP address is 192.168.10.10. you can use the IP address to access the website and I've setup custom address such as `terabite.test` which can be use instead of the IP address. However, not everyone has the same custom address. To find out your custom address, open the vagrant environment file (`homestead.yaml`) in a text editor and you can find the custom address under the `site` section. The `map` variable is the name of your custom address.

### Laravel's Artisan Commands


