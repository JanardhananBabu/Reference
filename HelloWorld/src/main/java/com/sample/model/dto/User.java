package com.sample.model.dto;

public class User {
	
	private String userName;
	private int userId;
	private String userInfo;
	
	public User(String userName,int userId, String userInfo)
	{
		this.userName=userName;
		this.userId=userId;
		this.userInfo=userInfo;
	}
	public User(){};
	
	 public String getUserName()
	 {
		 return this.userName;
	 }
	 public void setUserName(String userName)
	 {
		 this.userName=userName;
	 }
	 public int getUserId()
	 {
		 return this.userId;
	 }
	 public void setUserId(int userId)
	 {
		 this.userId=userId;
	 }
	 public String getUserInfo()
	 {
		 return this.userInfo;
	 }
	 public void setUserInfo(String userInfo)
	 {
		 this.userInfo=userInfo;
	 }
	

}
