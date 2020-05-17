function login() {
	cy.visit('/wp-login.php');
	cy.get('#user_login')
		.type('admin');
	cy.get('#user_pass')
		.type('secret');
	cy.get('#wp-submit').click();
}

function logout() {
	cy.contains(/^Log Out$/).click({ force: true });
}

function activatePlugin() {
	cy.visit('/wp-admin/plugins.php');
	cy.get('#the-list')
		.contains(/^Wp Reading Time 2020$/)
		.siblings('.row-actions.visible')
		.contains('Activate')
		.click();
	cy.contains('Plugin activated');
}

function deactivatePlugin() {
	cy.visit('/wp-admin/plugins.php');
	cy.get('#the-list')
		.contains(/^Wp Reading Time 2020$/)
		.siblings('.row-actions.visible')
		.contains('Deactivate')
		.click();
	cy.contains('Plugin deactivated');
}

describe('admin panel', () => {
	before(() => {
		login();
		activatePlugin();
	});
	
	after(() => {
		deactivatePlugin();
		logout();
	});

	it('displays the activated plugin in the admin section', () => {
		cy.visit('/wp-admin/plugins.php');
		cy.contains(/^Wp Reading Time 2020$/)
			.parent()
			.should('have.class', 'column-primary');
	});
});

describe('homepage', () => {
	before(() => {
		login();
		activatePlugin();
	});

	it('displays the reading time for a post on the homepage', () => {
		cy.visit('/');
		cy.contains('1 min');
	});
	
	after(() => {
		deactivatePlugin();
		logout();
	});
});
