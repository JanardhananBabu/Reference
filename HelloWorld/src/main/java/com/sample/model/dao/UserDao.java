package com.sample.model.dao;

/*	DAO is basically for writing the methods which handles CRUD operations 
 * 	It provides the session to connect to the database for persistence */


import org.hibernate.Session;
import org.hibernate.Transaction;
import com.sample.model.dto.User;

public class UserDao {

	private Session session ;
	private Transaction transaction;

	public String addUser(User user)
	{
		try{
			session = HibernateUtil.getSessionFactory().openSession();
			transaction = session.beginTransaction();
			session.save(user);
			transaction.commit();
			return "Success";
		}
		catch(Exception e)
		{
			e.getMessage();
		}
		return "Fails";
	}

	public User getUser(int id)
	{
		User user=null;
		try{
			session = HibernateUtil.getSessionFactory().openSession();
			transaction = session.beginTransaction();
			/*	There are two ways to get user object from the database*/
			/*	First way is to execute uniqueResult from the SQLQuery and mapping the result to String array
			 * 	and then instantiate the user bean with those values*/
			/*	This is showed below 
			 * 	 Query query = session.createSQLQuery("select userName, userInfo from USER where userId=:id");
			 *	 query.setInteger("id", id);
			 *	 Object[] info   = (Object [])query.uniqueResult();
			 * 	 user=new User(info[0].toString(),id,info[1].toString());
			 */

			/*	The second way is to use session.get/load methods with class and identifier of the 
			 * 	object as its parameters*/
			/*The only difference between load() and get() is , while using get(), the object is obtained directly from the db
			 * where as using load(), it sends the proxy first and then access the db while run time*/
			user=(User)session.get(User.class, id);
			System.out.println("UserName : "+user.getUserName());
			transaction.commit();
		}
		catch(Exception e)
		{
			e.getMessage();
		}
		return user;
	}

	public String deleteUser(User user)
	{
		try{
			session = HibernateUtil.getSessionFactory().openSession();
			transaction = session.beginTransaction();
			session.delete(user);
			transaction.commit();
		}
		catch(Exception e)
		{
			e.getMessage();
		}
		return "Deleted Succesfully !";
	}

	public String updateUserInfo(User user)//, int newId)
	{
		try{
			session = HibernateUtil.getSessionFactory().openSession();
			transaction = session.beginTransaction();
			user = (User)session.load(User.class, user.getUserId());
			/*	Two methods in updating */
			/*	use update sql query and use query.executeUpdate() method like shown below*/
			/*	Query query = session.createSQLQuery("update USER set userId=:newId where userId=:oldId");
			 * 	query.setInteger("newId",newId);
			 * 	query.setInteger("oldId",user.getUserId());
			 * 	query.executeUpdate();*/
			/*	The second method is to use get()/load() , load it into the session 
			 * and then use session.update() and use object as the parameter just like save*/
			user.setUserName("Test6");
			session.update(user);
			transaction.commit();
		}
		catch(Exception e)
		{
			e.getMessage();
		}
		return "Updated Successfully";
	}

}
