![](https://raw.githubusercontent.com/lloan/myLocal/images/div.png)
![](https://raw.githubusercontent.com/lloan/myLocal/images/title.png)

[![Codacy Badge](https://api.codacy.com/project/badge/Grade/3422a613d7e44942b7da7290a77169dc)](https://www.codacy.com/app/lloanalas/myLocal?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=lloan/myLocal&amp;utm_campaign=Badge_Grade)

myLocal is a Vagrant configuration designed and built for developing with WordPress on a LEMP stack. 

*It's simple, fast and efficient.*

# **Getting Started**
Make sure all dependencies below are met. If you get stuck or face any errors while installing myLocal, you are more than welcomed to open issues in this repository. 

## **Prerequisites**
Below are links to software required to run this project. These are required to create a virtual machine and load this configuration. myLocal will load all other required software in to your virtual machine, including the operating system, software and WordPress install.  

***Note:*** *Make sure to restart your computer after installing all prerequisites.*
- [Virtual Box](https://www.virtualbox.org/wiki/Downloads) by Oracle - Supports Windows, OS X, Linux
- [Vagrant](https://www.vagrantup.com/downloads.html) by Hashicorp - Supports Windows, OS X, Linux
- Git   

### **Virtual Box** 
Virtual Box is the software that runs the virtual machine you'll need to run myLocal. You can download it from virtualbox.org, [here](https://www.virtualbox.org/wiki/Downloads). Install the platform package for your operating system.  You do not need the extension pack or the SDK. You do not need to launch VirtualBox after installing it.

### **Vagrant**
 Vagrant is the software that configures the virtual machine and lets you share files between your host computer and the virtual machine's filesystem.  You can download it from vagrantup.com, [here](https://www.vagrantup.com/downloads.html). Install the version for your operating system.

**Windows Note**: The Installer may ask you to grant network permissions to Vagrant or make a firewall exception. Be sure to allow this.

### **Testing**
To test if **Git** is installed, run the following command in your preferred terminal: `git --version`. If successful, you will get something that looks like this: `git version 2.18.0.windows.1` or you can check if you have the Git Bash application installed. 

To test if **Vagrant** is installed, run the following command in your terminal: `vagrant --version` and you should get something like `Vagrant 2.1.1`.

## **Installation**
These instructions assume you've downloaded and installed Git, Virtual Box and Vagrant. You can test that they're installed prior to installation.

1. Clone this project to your machine: `git clone https://github.com/lloan/myLocal.git` 
2. Navigate to your project directory.
3. Run the following command: `vagrant up`
4. You will see some output, the first time you load this it will take a few minutes as it has to download the Vagrant Box from Vagrant Cloud. After that, whenever you bring your box back up, it will take under 2 minutes. You'll know it finished because it will open up a browser tab with `https://my.local.com/box.php` which has a ton of useful information. 

Once the box is running, you can visit the following pages for more information:
- Box Page: https://my.local.com/box.php - all information regarding your box.
- Server Info Page: https://my.local.com/info.php - all server information.

### **Manual Box Installation**
If you find that the download from the Vagrant Cloud is taking too long, you can add the base box manually. You can download it from the `/package` branch OR you can just click [here](https://github.com/lloan/myLocal/raw/package/package.box).

**Instructions**

- Download the base box to your local machine.
- In your terminal, navigate to the directory storing the `package.box` file.
- Run the following command: `vagrant box add myLocal package.box` 
- Open up the `Vagrantfile` in your project.
- In your Vagrant file find `config.vm.box = "lloan/myLocal"` and change it to `config.vm.box = "myLocal"`
- Clone this project to your machine: git clone https://github.com/lloan/myLocal.git
- Navigate to your project directory.
- Run `vagrant up` 

# **SSL**
In order to get your local SSL certifcate working, we've included the required certificate for you to add to your local machine or your browser. We have instructions below to get this working on Chrome & Firefox. 
 
## **Chrome**
On chrome you might get an error like this: 

![Chrome SSL Error](https://raw.githubusercontent.com/lloan/myLocal/images/not-secure-chrome.png)

### **Install**

- Open your Chrome browser settings.
- Scroll down and click on Advanced.
- Find the Privacy and Security settings.
- Open the Manage Certificates settings.
- Select the Trusted Root Certifications tab.
- Click on Import.
- On the new prompt, click next.
- It will then ask you to locate the file you want to use, click on Browse.
- Find the directory where you're storing the [ledkybCA.pem](https://raw.githubusercontent.com/lloan/myLocal/master/ssl/ledkybCA.pem) file - make sure you've set the extension search to all, by default its set to X.509.cer/.crt - otherwise it will not show up in the file explorer.
- Select ledkybCA.pem and click next.
- Click on **Place all certificates** in the follow store and choose **Trusted Root Certification Authorities**
- Click on next and finish
- You will get a Security Warning - click Yes. ![SSL Sceurity Warning](https://raw.githubusercontent.com/lloan/myLocal/images/security-warning.png)
- It will then tell  you the import was successful - you can close all prompts.
- Restart browser.

If successful, you will see this when working on your my.local.com site: 
 ![Chrome SSL Successful](https://raw.githubusercontent.com/lloan/myLocal/images/chrome-ssl-successful.png)

## **Firefox** 
On Firefox you might get an error like this: 
![Firefox SSL Error](https://raw.githubusercontent.com/lloan/myLocal/images/not-secure-firefox.png)

### **Install**

- Open your Firefox browser options
- Once the page loads, on the left hand sidebar, select **Privacy & Security**
- Scroll down to the **Certificates** section and click on View Certificates.
- Click on the **Authorities** tab.
- Click on **Import**.
- It will then ask you to locate the file you want to use.
- Find the directory where you're storing the [ledkybCA.pem](https://raw.githubusercontent.com/lloan/myLocal/master/ssl/ledkybCA.pem) file - make sure you've set the extension search to all, by default its set to X.509.cer/.crt - otherwise it will not show up in the file explorer.
- Select ledkybCA.pem and click Open. 
- A new prompt will show up. ![Firefox Certificate Manager](https://raw.githubusercontent.com/lloan/myLocal/images/certificate-manager-firefox.png) Make sure to check the box that reads **Trust this CA to identify websites**. 
- Click OK and you're done. Restart your browser.

If successful, you will see this when working on your my.local.com site: 
 ![Firefox SSL Successful](https://raw.githubusercontent.com/lloan/myLocal/images/firefox-ssl-successful.png)
# **Troubleshooting**

If you're having problems after running `vagrant up` trying provisioning your box again. To do so, you can run the following command: `vagrant up --provision` and it will try loading everything again.

Some useful vagrant commands:
- `vagrant up`- starts up your vagrant machine, adding the `--provision` flag makes Vagrant run all of our provisioners (shell script and so on). 

- `vagrant halt` - stops the vagrant box.

- `vagrant ssh` - connects you to the box via ssh.

- `vagrant ssh-config` - shows you ssh configuration information

- `vagrant destroy` - destroys the vagrant box, resets everything. Careful, if you have any information in your database that you need, back it up, otherwise, it will be lost. 

- `vagrant status` - shows you status of the current vagrant instance, determined by the directory you're currently in.

- `vagrant global-status` - shows you status for all vagrant instances currently running.



# **License**
This project is licensed under the MIT License - see the LICENSE.md file for details

## **Acknowledgements** 
- Dependency Manager developed by Dev_NIX
- Inspired by Scotch Box developed by whatnickcodes