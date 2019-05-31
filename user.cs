using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Userdashboard
{
    #region User
    public class User
    {
        #region Member Variables
        protected string _fname;
        protected string _lname;
        protected string _email;
        protected string _password;
        #endregion
        #region Constructors
        public User() { }
        public User(string fname, string lname, string password)
        {
            this._fname=fname;
            this._lname=lname;
            this._password=password;
        }
        #endregion
        #region Public Properties
        public virtual string Fname
        {
            get {return _fname;}
            set {_fname=value;}
        }
        public virtual string Lname
        {
            get {return _lname;}
            set {_lname=value;}
        }
        public virtual string Email
        {
            get {return _email;}
            set {_email=value;}
        }
        public virtual string Password
        {
            get {return _password;}
            set {_password=value;}
        }
        #endregion
    }
    #endregion
}