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

		it('displays various plugin settings with default values', () => {
			cy.visit('/wp-admin/options-general.php');
			cy.contains(/^Reading Time Plugin$/)
				.click();
			cy.contains('Reading Time Settings');
			cy.contains('Words per minute (WPM)')
				.siblings('td')
				.children('input')
				.should('have.value', '250');
			cy.contains('Save Changes');
		});
	});
	
	describe('homepage', () => {
		it('displays the reading time for a post on the homepage', () => {
			cy.visit('/');
			cy.contains(/☕ 1 min/);
		});
	});
		
	after(() => {
		deactivatePlugin();
		logout();
	});
});
