#The Console component

- Must have for creating console PHP applications. Laravel artisan based on this.
- You can generate reports, backup database, cleare some records etc.
- Install via composer:  $ composer require symfony/console
- Setup composer autoliad to load your own folder/file with classes
- Extend class Command
- Implement 2 methods: configure and execute
- In a root directory create command file with Application class configured to add our Command and run the Application instance.
- execute method must receive InputInterface and OutputInterface parameters to work
- In configure method you can add options and argumants to you command (see method definition for details)
