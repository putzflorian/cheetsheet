# Renaming Git Branch

Luckily, Git allows you to rename the branch very easily using the `git branch -m` command.

* Start by switching to the local branch which you want to rename:  
`git checkout <old_name>`
* Rename the local branch by typing:  
`git branch -m <new_name>`
* Push the <new_name> local branch and reset the upstream branch:  
`git push origin -u <new_name>`
* Delete the <old_name> remote branch:  
`git push origin --delete <old_name>`

That’s it. You have successfully renamed the local and remote Git branch.
