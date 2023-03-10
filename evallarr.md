evallarr@W10EVALLARINTB MINGW64 ~
$ git clone https://github.com/Desarrollo-Sonda-Panama/testApp.git
Cloning into 'testApp'...

evallarr@W10EVALLARINTB MINGW64 ~
$ ^C

evallarr@W10EVALLARINTB MINGW64 ~
$ pwd
/c/Users/evallarr

evallarr@W10EVALLARINTB MINGW64 ~
$ git clone https://github.com/Desarrollo-Sonda-Panama/testApp.git
Cloning into 'testApp'...
remote: Repository not found.
fatal: repository 'https://github.com/Desarrollo-Sonda-Panama/testApp.git/' not found

evallarr@W10EVALLARINTB MINGW64 ~
$ git clone https://github.com/Desarrollo-Sonda-Panama/testApp.git
Cloning into 'testApp'...
remote: Repository not found.
fatal: repository 'https://github.com/Desarrollo-Sonda-Panama/testApp.git/' not found

evallarr@W10EVALLARINTB MINGW64 ~
$ git clone https://github.com/Desarrollo-Sonda-Panama/testApp.git
Cloning into 'testApp'...
remote: Enumerating objects: 23, done.
remote: Counting objects: 100% (23/23), done.
remote: Compressing objects: 100% (18/18), done.
remote: Total 23 (delta 4), reused 17 (delta 1), pack-reused 0
Receiving objects: 100% (23/23), 886.08 KiB | 2.20 MiB/s, done.
Resolving deltas: 100% (4/4), done.

evallarr@W10EVALLARINTB MINGW64 ~
$ dir
3D\ Objects
AppData
Configuración\ local
Contacts
Cookies
Datos\ de\ programa
Desktop
Documents
Downloads
Entorno\ de\ red
Favorites
Impresoras
Links
Menú\ Inicio
Mis\ documentos
Music
NTUSER.DAT
NTUSER.DAT{53b39e88-18c4-11ea-a811-000d3aa4692b}.TM.blf
NTUSER.DAT{53b39e88-18c4-11ea-a811-000d3aa4692b}.TMContainer00000000000000000001.regtrans-ms
NTUSER.DAT{53b39e88-18c4-11ea-a811-000d3aa4692b}.TMContainer00000000000000000002.regtrans-ms
OneDrive
Pictures
Plantillas
Reciente
Saved\ Games
Searches
SendTo
Videos
mcafee\ dlp\ quarantined\ files
ntuser.dat.LOG1
ntuser.dat.LOG2
ntuser.ini
source
testApp

evallarr@W10EVALLARINTB MINGW64 ~
$ cd testApp

evallarr@W10EVALLARINTB MINGW64 ~/testApp (main)
$ dir
README.md  hola.txt.txt

evallarr@W10EVALLARINTB MINGW64 ~/testApp (main)
$ git status
On branch main
Your branch is up to date with 'origin/main'.

Untracked files:
  (use "git add <file>..." to include in what will be committed)
        hola.txt.txt

nothing added to commit but untracked files present (use "git add" to track)

evallarr@W10EVALLARINTB MINGW64 ~/testApp (main)
$ git add*
git: 'add*' is not a git command. See 'git --help'.

The most similar command is
        add

evallarr@W10EVALLARINTB MINGW64 ~/testApp (main)
$ git add *

evallarr@W10EVALLARINTB MINGW64 ~/testApp (main)
$ git status
On branch main
Your branch is up to date with 'origin/main'.

Changes to be committed:
  (use "git restore --staged <file>..." to unstage)
        new file:   hola.txt.txt


evallarr@W10EVALLARINTB MINGW64 ~/testApp (main)
$ git commit -m "Mi primera prueva"
[main 8859033] Mi primera prueva
 Committer: Vallarino Roldan <evallarr@sonda.com>
Your name and email address were configured automatically based
on your username and hostname. Please check that they are accurate.
You can suppress this message by setting them explicitly. Run the
following command and follow the instructions in your editor to edit
your configuration file:

    git config --global --edit

After doing this, you may fix the identity used for this commit with:

    git commit --amend --reset-author

 1 file changed, 1 insertion(+)
 create mode 100644 hola.txt.txt

evallarr@W10EVALLARINTB MINGW64 ~/testApp (main)
$ git status
On branch main
Your branch is ahead of 'origin/main' by 1 commit.
  (use "git push" to publish your local commits)

nothing to commit, working tree clean

evallarr@W10EVALLARINTB MINGW64 ~/testApp (main)
$ git push origin main
Enumerating objects: 4, done.
Counting objects: 100% (4/4), done.
Delta compression using up to 4 threads
Compressing objects: 100% (2/2), done.
Writing objects: 100% (3/3), 294 bytes | 14.00 KiB/s, done.
Total 3 (delta 0), reused 0 (delta 0), pack-reused 0
To https://github.com/Desarrollo-Sonda-Panama/testApp.git
   8652b47..8859033  main -> main

evallarr@W10EVALLARINTB MINGW64 ~/testApp (main)
$ git log
commit 8859033de051367144cb2735d9d615b1799c6152 (HEAD -> main, origin/main, origin/HEAD)
Author: Vallarino Roldan <evallarr@sonda.com>
Date:   Wed Mar 8 15:37:50 2023 -0500

    Mi primera prueva

commit 8652b475fca3359129ad1aea610c8c9b421bcd40
Author: dev01Pan <63884865+dev01Pan@users.noreply.github.com>
Date:   Tue Jan 10 17:11:43 2023 -0500

    Initial commit

evallarr@W10EVALLARINTB MINGW64 ~/testApp (main)
$ git pull
remote: Enumerating objects: 4, done.
remote: Counting objects: 100% (4/4), done.
remote: Compressing objects: 100% (3/3), done.
remote: Total 3 (delta 0), reused 0 (delta 0), pack-reused 0
Unpacking objects: 100% (3/3), 1.20 KiB | 17.00 KiB/s, done.
From https://github.com/Desarrollo-Sonda-Panama/testApp
   8859033..30229f2  main       -> origin/main
Updating 8859033..30229f2
Fast-forward
 cortesTas59.csv | 16 ++++++++++++++++
 1 file changed, 16 insertions(+)
 create mode 100644 cortesTas59.csv

evallarr@W10EVALLARINTB MINGW64 ~/testApp (main)
$ git status
On branch main
Your branch is up to date with 'origin/main'.

Changes not staged for commit:
  (use "git add <file>..." to update what will be committed)
  (use "git restore <file>..." to discard changes in working directory)
        modified:   hola.txt.txt

no changes added to commit (use "git add" and/or "git commit -a")

evallarr@W10EVALLARINTB MINGW64 ~/testApp (main)
$ git add .

evallarr@W10EVALLARINTB MINGW64 ~/testApp (main)
$ git status
On branch main
Your branch is up to date with 'origin/main'.

Changes to be committed:
  (use "git restore --staged <file>..." to unstage)
        modified:   hola.txt.txt


evallarr@W10EVALLARINTB MINGW64 ~/testApp (main)
$ git push origin main
Everything up-to-date

evallarr@W10EVALLARINTB MINGW64 ~/testApp (main)
$ git push
Everything up-to-date

evallarr@W10EVALLARINTB MINGW64 ~/testApp (main)
$ git status
On branch main
Your branch is up to date with 'origin/main'.

Changes to be committed:
  (use "git restore --staged <file>..." to unstage)
        modified:   hola.txt.txt


evallarr@W10EVALLARINTB MINGW64 ~/testApp (main)
$ git add *

evallarr@W10EVALLARINTB MINGW64 ~/testApp (main)
$ git status
On branch main
Your branch is up to date with 'origin/main'.

Changes to be committed:
  (use "git restore --staged <file>..." to unstage)
        modified:   hola.txt.txt


evallarr@W10EVALLARINTB MINGW64 ~/testApp (main)
$ git commit -m "prueba"
[main 4dda43b] prueba
 Committer: Vallarino Roldan <evallarr@sonda.com>
Your name and email address were configured automatically based
on your username and hostname. Please check that they are accurate.
You can suppress this message by setting them explicitly. Run the
following command and follow the instructions in your editor to edit
your configuration file:

    git config --global --edit

After doing this, you may fix the identity used for this commit with:

    git commit --amend --reset-author

 1 file changed, 3 insertions(+), 1 deletion(-)

evallarr@W10EVALLARINTB MINGW64 ~/testApp (main)
$ git push
Enumerating objects: 5, done.
Counting objects: 100% (5/5), done.
Delta compression using up to 4 threads
Compressing objects: 100% (3/3), done.
Writing objects: 100% (3/3), 325 bytes | 21.00 KiB/s, done.
Total 3 (delta 1), reused 0 (delta 0), pack-reused 0
remote: Resolving deltas: 100% (1/1), completed with 1 local object.
To https://github.com/Desarrollo-Sonda-Panama/testApp.git
   30229f2..4dda43b  main -> main

evallarr@W10EVALLARINTB MINGW64 ~/testApp (main)
$ git push^C

evallarr@W10EVALLARINTB MINGW64 ~/testApp (main)
$
