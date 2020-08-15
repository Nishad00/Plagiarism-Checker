echo "1] Lex & Yacc "
echo "1] Fix NTFS Problem "
echo "Enter Your Choice"
read choice
case $choice in
		'1')
			echo "#########################################################         Running sudo apt-get update     ##############################################################\n"
			sudo apt-get update
			echo "#########################################################       Running sudo apt-get install flex    ###########################################################\n"
			sudo apt-get install flex
			echo "########################################################       Running sudo apt-get install byacc   ############################################################\n"
			sudo apt-get install byacc
		'2')
			echo "########################################################      Running sudo ntfsfix /dev/sda4  ############################################################\n"
			sudo ntfsfix /dev/sda4
;;


esac




sudo apt-get install youtube-dl
sudo apt install python-pip
sudo apt install python3-pip

download .deb vscode
root@natsu:/home/natsu/Downloads# dpkg -i code_1.38.1-1568209190_amd64.deb 


Xampp Installations
chmod +x xampp-linux-x64-7.2.9-0-installer.run
sudo ./xampp-linux-x64-7.2.9-0-installer.run
cd /opt/lampp
sudo ./manager-linux-x64.run
