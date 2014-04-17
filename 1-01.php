  <div>

The purpose of this demo is to explain what DevOps really is and what it really can do.  This in fact a DevOps solution of sorts, although it will look very different from the 'Puppet' or 'Chef' interfaces that are so popular today.
<p>
DevOps is simply the maturing and formalizing of Operations.  System Administrators have been informally doing such things for years, but now two things have caused their practice to formalize into a robust tool set:

<ul>
	<li>Open-source collaboration and solution-sharing on the web
	<li>Intense consolidation and out-sourcing which means an Administration team is now responsible for hundreds or thousands of servers instead of only a dozen or so.
</ul>

Modern DevOps solutions usually operate much like Operations Management tools did in the past: A central server is set up and polls or is polled by remote clients, often written in Java.  The server collects all the data into an open or proprietary database, sends out alerts, produces graphs and allows commands to be remotely run. It is this last element that has always been a little light in tools such as SCOM or Foglight.  The Window-Centric aspect of these tools, and their use in Microsoft shops never made it seems important.  The idea was that once alerted, an administrator would log into the servers with issues one at a time and fix them (either through a GUI or command line).
<p>
But Unix has for many years been built on remote command execution.  This means that installs, filesystem changes, shutdowns, updates, or reports could easily be kicked off from one server with a simply command syntax change.
<p>
Here is an example.  Because a trusted connected can be established between two servers, a password is not needed to tunnel from one to the other and run commands:
