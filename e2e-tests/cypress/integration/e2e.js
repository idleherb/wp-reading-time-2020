function login() {
	cy.visit('/wp-login.php');
	cy.wait(50);
	cy.get('#user_login')
		.type(Cypress.env('wp_user') || 'admin');
	cy.get('#user_pass')
		.type(Cypress.env('wp_password') || 'secret');
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

describe('wp-reading-time-2020 e2e tests', () => {
	before(() => {
		login();
		activatePlugin();
	});

	describe('admin panel', () => {
		it('displays the activated plugin in the admin section', () => {
			cy.visit('/wp-admin/plugins.php');
			cy.contains(/^Wp Reading Time 2020$/)
				.parent()
				.should('have.class', 'column-primary');
		});
	});
	
	describe('homepage', () => {
		it('displays the reading time for a post on the homepage', () => {
			cy.visit('/');
			cy.contains(/\u2615 1 min/);
		});
	});
		
	after(() => {
		deactivatePlugin();
		logout();
	});
});
