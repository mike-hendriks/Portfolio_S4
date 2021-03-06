var FtpDeploy = require("ftp-deploy");
var ftpDeploy = new FtpDeploy();

var config = {
  user: process.env.FTPUSERNAME,
  password: process.env.FTPPASS,
  host: process.env.FTPHOST,
  port: 21,
  localRoot: __dirname + "/../",
  remoteRoot: process.env.FTPPATH,
  deleteRemote: false,
  include: ["*"],
  exlude: [
    "/.circleci",
    "/.git",
    "/.vscode",
    "/node_modules",
    ".editorconfig",
    ".gitignore",
    "package.json",
    "package-lock.json",
    "README.md"
  ]
};

ftpDeploy.deploy(config, err => {
  if (err) console.log(err);
  else console.log("Uploaded to server");
});