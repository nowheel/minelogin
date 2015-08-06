# MINELOGIN

THIS MODULE IS DEPRECATED, WE HAVE ISSUE WITH REGISTRATION END CHECK USER WITH DATABASE, BECAUSE AUTHME RELOADED IS INCOMPATIBLE

Minelogin is a module for Drupal 7, to registration form added 1 step for minecraft password, required Bukkit with AuthMe plugin.




###INSTALLATION:

1. after installed  AuthMe plugin to your bukkit server, restart it.
2. in your plugins directory now you find a folder called "AuthMe", in this you find a file called "config.yml", open it with your favorite editor.
3. change "config.yml" like it:
```
DataSource:
  mySQLColumnName: username             //column of player's name
  mySQLTablename: minelogin         //table of your database - minelogin is default for running with module
  mySQLUsername: root               //user of database
  backend: mysql                    //type of database, minelogin required mysql
  mySQLColumnLastLogin: lastlogin   //column of player's last login
  mySQLDatabase: name-of-db         //the name of your database
  mySQLPort: '3306'                 //port of your sql, 3306 is default
  mySQLColumnIp: ip                 //column of player's ip
  mySQLHost: 127.0.0.1              //host of your sql, 127,0,0,1 is default
  mySQLColumnPassword: minepass     //column of player's password
  mySQLPassword: your-password      //password for user of database
  caching: true
  mySQLlastlocX: x                  //x coordinates of player in the minecraft world
  mySQLlastlocY: y                  //y coordinates of player in the minecraft world
  mySQLlastlocZ: z                  //z coordinates of player in the minecraft world
  mySQLlastlocWorld: world          //last world where are player
  mySQLColumnEmail: mail            //column of player's email
  mySQLColumnId: id                //column of player's unique id
  mySQLColumnLogged: isLogged       //column for check if player is online
GroupOptions:
  UnregisteredPlayerGroup: ''
  RegisteredPlayerGroup: ''
  Permissions:
    PermissionsOnJoin: []
settings:
  sessions:
    enabled: true
    timeout: 120
    sessionExpireOnIpChange: false
  restrictions:
    allowChat: false
    allowCommands:
    - /login
    - /register
    - /l
    - /reg
    - /passpartu
    - /email
    - /captcha
    maxRegPerIp: 3
    maxNicknameLength: 20
    ForceSingleSession: true
    ForceSpawnLocOnJoinEnabled: false
    SaveQuitLocation: false
    AllowRestrictedUser: false
    AllowedRestrictedUser:
    - playername;127.0.0.1
    kickNonRegistered: false
    kickOnWrongPassword: false
    teleportUnAuthedToSpawn: false
    minNicknameLength: 3
    allowMovement: false
    timeout: 120
    allowedNicknameCharacters: '[a-zA-Z0-9_]*'
    allowedMovementRadius: 100
    enablePasswordVerifier: true
    ProtectInventoryBeforeLogIn: true
    displayOtherAccounts: true
    ForceSpawnOnTheseWorlds:
    - world
    - world_nether
    - world_the_end
    banUnsafedIP: false
    spawnPriority: authme,essentials,multiverse,default
    maxLoginPerIp: 0
    maxJoinPerIp: 0
    noTeleport: false
  GameMode:
    ForceSurvivalMode: false
    ResetInventoryIfCreative: false
    ForceOnlyAfterLogin: false
  security:
    minPasswordLength: 4
    unLoggedinGroup: unLoggedinGroup
    passwordHash: SHA512
    doubleMD5SaltLength: 8
    supportOldPasswordHash: false
    unsafePasswords: []
  registration:
    enabled: true
    messageInterval: 5
    force: true
    enableEmailRegistrationSystem: true
    doubleEmailCheck: false
    forceKickAfterRegister: false
    forceLoginAfterRegister: true
  unrestrictions:
    UnrestrictedName: []
  messagesLanguage: en
  forceCommands: []
  forceCommandsAsConsole: []
  useWelcomeMessage: true
  broadcastWelcomeMessage: false
  delayJoinMessage: false
ExternalBoardOptions:
  mySQLColumnSalt: ''
  mySQLColumnGroup: ''
  nonActivedUserGroup: -1
  mySQLOtherUsernameColumns: []
  bCryptLog2Round: 10
  phpbbTablePrefix: phpbb_
  phpbbActivatedGroupId: 2
  wordpressTablePrefix: wp_
permission:
  EnablePermissionCheck: false
BackupSystem:
  ActivateBackup: false
  OnServerStart: false
  OnServerStop: true
  MysqlWindowsPath: C:\\Program Files\\MySQL\\MySQL Server 5.1\\
Passpartu:
  enablePasspartu: false
Security:
  SQLProblem:
    stopServer: true
  ReloadCommand:
    useReloadCommandSupport: true
  console:
    noConsoleSpam: false
    removePassword: true
  captcha:
    useCaptcha: false
    maxLoginTry: 5
    captchaLength: 5
Converter:
  Rakamak:
    fileName: users.rak
    useIP: false
    ipFileName: UsersIp.rak
Email:
  mailSMTP: smtp.gmail.com
  mailPort: 465
  mailAccount: my.name.account@gmail.com
  mailPassword: your_password
  mailSenderName: administration
  RecoveryPasswordLength: 8
  mailSubject: Your new AuthMe Password
  mailText: 'Dear <playername>, <br /><br /> This is your new AuthMe password for
    the server <br /><br /> <servername> : <br /><br /> <generatedpass><br /><br />Do
    not forget to change password after login! <br /> /changepassword <generatedpass>
    newPassword'
  maxRegPerEmail: 1
  recallPlayers: false
  delayRecall: 5
Hooks:
  multiverse: true
  chestshop: true
  bungeecord: false
  notifications: true
  disableSocialSpy: true
  useEssentialsMotd: false
Performances:
  useMultiThreading: true
Purge:
  useAutoPurge: false
  daysBeforeRemovePlayer: 60
  removePlayerDat: false
  removeEssentialsFile: false
  defaultWorld: world
  removeLimitedCreativesInventories: false
  removeAntiXRayFile: false
Protection:
  enableProtection: false
  countries:
  - US
  - GB
  countriesBlacklist:
  - A1
  enableAntiBot: false
  antiBotSensibility: 5
  antiBotDuration: 10
VeryGames:
  enableIpCheck: false
```


##future updates:
  *add drupal 7 roles to module*
