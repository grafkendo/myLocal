# -*- mode: ruby -*-
# vi: set ft=ruby :


require File.dirname(__FILE__)+"/dependency_manager"

check_plugins ["vagrant-hostsupdater", "vagrant-host-shell"]
 
Vagrant.configure("2") do |config|
    config.vm.box = "lloan/myLocal"
    config.vm.network "private_network", ip: "192.168.33.114"
    config.vm.network "forwarded_port", host_ip: "127.0.0.1", guest: 3306, host: 1122 
    config.vm.hostname = "my.local.com"
    config.hostsupdater.aliases = ["my.local.com"]

    config.vm.provider "virtualbox" do |v|
        v.memory = 4096
        v.cpus = 4
        v.name = 'myLocal'
    end

    config.ssh.username = "vagrant"
    config.ssh.password = "vagrant"

    if Vagrant::Util::Platform.windows?
        ## FOR WINDOWS USERS ##
        config.vm.synced_folder ".", "/var/www", 
        :mount_options => ["dmode=777", "fmode=666"]       
    else
        ## FOR MAC USERS ##
        config.vm.synced_folder ".", "/var/www",
        id: "core",
        :nfs => true,
        :mount_options => ['nolock,vers=3,udp,noatime']
    end

    config.vm.provision "shell", path: "script.sh" 
 
    config.vm.provision :host_shell do |host_shell|
        host_shell.inline = 'start chrome "https://my.local.com/box.php"'
    end
end

