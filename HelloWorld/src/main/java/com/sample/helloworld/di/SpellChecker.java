package com.sample.helloworld.di;

import org.springframework.stereotype.Component;
@Component
public class SpellChecker {
	
	private String message=" Called Inside SpellChecker";
	
	public String spellcheck()
	{
		System.out.println(message);
		return message;
	}

}
