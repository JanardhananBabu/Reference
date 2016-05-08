package com.sample.helloworld;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;

import com.sample.helloworld.di.TextEditor;
import com.sample.model.dao.UserDao;
import com.sample.model.dto.User;

/**
 * Handles requests for the application home page. This handles the url mapping for navigation.
 */

@Controller	//	Indicates that this is one of our controller class
public class HomeController {
 
	@Autowired
	TextEditor te;
	/**
	 * Simply selects the home view to render by returning its name.
	 */
	
	//ViewResolver does the conversion and targets the corresponding jsp file with respect to returning String 
	@RequestMapping(value = "/", method = RequestMethod.GET)
	public String home(Model model) {
		//DI Test
		String message=te.doSpellCheck();
		model.addAttribute("msg", message );

		return "home";
	}
	
	//ViewResolver does the conversion and targets the corresponding jsp file with respect to returning String 
	@RequestMapping(value ="/testing", method = RequestMethod.GET)
	public String test(Model model)
	{
		String message ="Im doing something here !";
		model.addAttribute("msg", message);
		return "test";
	}
	
	//ViewResolver does the conversion and targets the corresponding jsp file with respect to returning String 
	@RequestMapping(value ="/hibernate", method = RequestMethod.GET)
	public String hibernate(Model model)
	{
		String message ="I'm playing with hibernate";
		model.addAttribute("msg", message);
		
		//Hibernate Test
		
		UserDao userdao = new UserDao();
		/*	testing
		 *	User user = new User("Test7",7,"Hello!");
		 *  userdao.addUser(user);*/
		
		User user = userdao.getUser(6);
		/*	testing
		 *	System.out.println(userdao.deleteUser(user));
		 *	System.out.println(userdao.updateUserInfo(user));*/
		return "hibernate";
	}

	
}

