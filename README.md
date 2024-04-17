<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a></p>

# Memo 0.9.1

Display random memos.


## How to install an extension

[Download ZIP file](https://github.com/schulle4u/yellow-memo/archive/refs/heads/main.zip) and copy it into your `system/extensions` folder. [Learn more about extensions](https://github.com/annaesvensson/yellow-update).

## How to show memos

Create a `[memo]` shortcut. 

The following arguments are available, All arguments are optional:

`Label` = Label for the open memo button.  
`CloseLabel` = Label for the close memo button.  

This extension displays a random text message as toast notification when clicking the button. Originating from a fun web page to nag people with silly messages, it can be used for any project. As a toy for random notes, quotes, virtual fortune cookies, tipps and tricks, or whatever you like. I'm currently using it as small toy for a website dedicated to blind android users, randomly displaying short tipps for the operating system. Messages must be text only, Markdown or HTML is not possible. 

## Examples

Create a memo button:

    [memo]
    [memo "Give me a tipp"]
    [memo - "Close"]  

Example memo configuration file, JSON format: 

```
{
    "messages":
    [
        "Fun to use: Edit your website in a web browser. Log in with your user account. You can use the normal navigation, make some changes and see the result immediately. It is a great way to update your website. No database, no admin panel. Datenstrom Yellow doesn't get in your way.",
        "Just files and folders: Edit your website in a text editor. Create small web pages, wikis and blogs. You can use your favorite text editor and change everything on your computer. This is convenient for developers, designers and translators. Datenstrom Yellow adapts to you.",
        "Installed in a few minutes: Download one file, unzip it and copy everything to your web server. Your website is immediately available. The most important things are included. There are extensions with additional features, languages and themes that you can install. Datenstrom Yellow is open source."
    ]
}
```

## Settings

The following setting can be configured in file `system/extensions/yellow-system.ini`:

`MemoMessageFile` = File name for storing memos  

The following file can be customised:

`system/extensions/memo.json` = configuration file for memos, JSON format  

## Developer

Steffen Schultz. [Get help](https://datenstrom.se/yellow/help/).
