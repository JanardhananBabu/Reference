package com.sample.model.dao;


import org.hibernate.SessionFactory;
import org.hibernate.cfg.Configuration;
 
public class HibernateUtil {
 
 //	SessionFactory provides the session instance    
    private static final SessionFactory sessionFactory = buildSessionFactory();
    private static SessionFactory buildSessionFactory() {
        try {
        	/*  Purpose is to tell which is our hibernate configuration file. 
        	 *	Here xml file placed in src/main/resource folder*/
        	Configuration configuration = 
        		    new Configuration().configure("hibernate.cfg.xml");
        	return configuration.buildSessionFactory();
        }
        catch (Throwable ex) {
            // Make sure you log the exception, as it might be swallowed
            ex.printStackTrace();
            throw new ExceptionInInitializerError(ex);
        }
    }
 
    // Returns the same sessionFactory object to the entire application
    public static SessionFactory getSessionFactory() {
        return sessionFactory;
    }
 
    public static void shutdown() {
    	// Close caches and connection pools
    	getSessionFactory().close();
    }
 


}